<?php
class DB { 
    public function dbConnect() {
        $host='localhost';
        $db = 'flowBase';
        $port = "5432";
        $username = 'postgres';
        $password = '8734';

        $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
        //$connection_string = "host={$host} port={$port} dbname={$db} user={$username} password={$password} ";
        //$conn = pg_connect($connection_string);
        try {
            $conn = new PDO($dsn);
            if($conn) {
                echo("<script>console.log('PHP: \"соединились с базой $db!\"');</script>");
                return $conn;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
 
    public function dbSelect($colours, $longevities, $name) {
        $sql = "SELECT DISTINCT flowers.flower_name, flowers.flower_id FROM public.flowers";

        if (!empty($longevities)) {
            $sql = $sql . " JOIN public.flower_longevity ON flower_longevity.longevity_id = flowers.longevity_id";
        }

        $flag = false;
        if (!empty($colours)) {
            $sql = $sql . " JOIN public.flowers_and_colours ON flowers_and_colours.flower_id = flowers.flower_id WHERE (";
            
            foreach ($colours as $colour) {
                if ($flag) {
                    $sql = $sql . " OR";
                }

                $sql = $sql . " flowers_and_colours.colour_id = '$colour'";
                $flag = true;
            }
            $sql = $sql . ")";
        }

        if (!empty($longevities)) {
            if (!$flag) {
                $sql = $sql . " WHERE (";
            } else {
                $sql = $sql . " AND (";
            }
            
            $flag = false;
            foreach ($longevities as $longevity) {
                if ($flag) {
                    $sql = $sql . " OR";
                }

                $sql = $sql . " flower_longevity.longevity_type = '$longevity'";
                $flag = true;
            }

            $sql = $sql . ")";
        }

        if (!empty($name)) {
            if (!$flag) {
                $sql = $sql . " WHERE (";
            } else {
                $sql = $sql . " AND (";
            }
            $sql = $sql . " lower(flowers.flower_name) LIKE '$name%')";
        }

        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetFlowerCols($flower_id) {
        $sql = "SELECT DISTINCT flower_colours.colour_name, flower_colours.colour_id FROM public.flowers 
        JOIN public.flowers_and_colours ON flowers_and_colours.flower_id = flowers.flower_id 
        JOIN public.flower_colours ON flower_colours.colour_id = flowers_and_colours.colour_id
        WHERE flowers.flower_id = '$flower_id'";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbLogin($name, $hashpassword) {
        $sql = "SELECT * FROM public.users WHERE user_login = '$name' AND user_password = '$hashpassword'";
        //$res = pg_query_params(DB::dbConnect(), $sql, array($name, $hashpassword));
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbRegis($name, $hashpassword) {
        $sql = "INSERT INTO public.users (user_login,user_password) VALUES ('$name', '$hashpassword')";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbCheckLogin($name) {
        $sql = "SELECT * FROM public.users WHERE user_login = '$name'";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetUserById($user_id) {
        $sql = "SELECT * FROM public.users WHERE user_id = $user_id";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }
    
    public function dbGetColourName($colour_id) {
        $sql = "SELECT colour_name FROM public.flower_colours WHERE colour_id = $colour_id";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetFavFlowers($user_id) {
        $sql = "SELECT favourite_flowers.flower_id, favourite_flowers.colour_id, flowers.flower_name, flower_colours.colour_name
        FROM public.favourite_flowers
        JOIN public.flower_colours ON flower_colours.colour_id = favourite_flowers.colour_id
        JOIN public.flowers ON flowers.flower_id = favourite_flowers.flower_id
        WHERE favourite_flowers.user_id = $user_id";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbSaveFav($user_id, $flower_id, $colour_id) {
        $sql = "SELECT * FROM public.favourite_flowers WHERE (colour_id = $colour_id AND flower_id = $flower_id AND user_id = $user_id);";
        $data = DB::dbConnect() -> query($sql) -> fetchAll();
        if (!$data) { 
            $sql = "INSERT INTO public.favourite_flowers(user_id, flower_id, colour_id) VALUES ($user_id, $flower_id, $colour_id);";
            $res = DB::dbConnect() -> query($sql);
            return $res;
        }
        return;
    }

    public function dbDelFav($user_id, $flower_id, $colour_id) {
        $sql = "DELETE FROM public.favourite_flowers WHERE (colour_id = $colour_id AND flower_id = $flower_id AND user_id = $user_id);";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbShowSymb($colour_id) {
        $sql = "SELECT colour_name FROM public.flower_colours WHERE colour_id = $colour_id";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbSaveBoq($map, $user_id, $boqName) {
        $res = DB::dbInsertBoq($user_id, $boqName);

        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            DB::dbInsertBoqFlowers($row["bouquet_id"], $map);
        }
    }

    public function dbInsertBoq($user_id, $boqName) {
        $sql = "INSERT INTO public.bouquets(bouquet_name, user_id) VALUES ('$boqName', $user_id) RETURNING bouquet_id";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbInsertBoqFlowers($bouquet_id, $map) {
        $sql = "INSERT INTO public.bouquet_flowers(bouquet_id, flower_id, number_of_flowers, colour_id) VALUES";

        $n = 0;
        $flag = false;

        foreach($map as $arr) {
            if ($flag) {
                $sql = $sql . ", ";
            }

            $sql = $sql . " ($bouquet_id, $arr[0], $arr[2], $arr[1])";
            $flag = true;
            ++$n;
        }

        $res = DB::dbConnect()->query($sql);
        
        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            echo($row["table_name"].'-'.$row["column_name"]);
        }
    }

    public function dbGetUserBoq($user_id) {
        $sql = "SELECT bouquet_name, bouquet_id FROM public.bouquets WHERE user_id = $user_id";
        $res = DB::dbConnect()->query($sql);
        return $res;
    }

    public function dbDelBoq($user_id, $bouquet_id) {
        $sql = "DELETE FROM public.bouquet_flowers WHERE (bouquet_id = $bouquet_id)";
        $res = DB::dbConnect() -> query($sql);
        $sql = "DELETE FROM public.bouquets WHERE (bouquet_id = $bouquet_id AND user_id = $user_id)";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetBoqFlowers($boq_id) {
        $sql = "SELECT bouquet_flowers.flower_id, bouquet_flowers.number_of_flowers, bouquet_flowers.colour_id, flowers.flower_name, flower_colours.colour_name FROM public.bouquet_flowers
        JOIN public.flower_colours ON flower_colours.colour_id = bouquet_flowers.colour_id
        JOIN public.flowers ON flowers.flower_id = bouquet_flowers.flower_id WHERE bouquet_id=$boq_id";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbChangeLog($user_id, $login, $hashpassword) {
        $sql = "UPDATE public.users SET user_login = '$login', user_password = '$hashpassword' WHERE user_id = $user_id;";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetRole($user_id) {
        $sql = "SELECT user_role_id FROM public.users WHERE user_id = $user_id";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetUser($user_login) {
        $sql = "SELECT * FROM public.users WHERE (lower(user_login) LIKE '$user_login%')";
        if (ctype_digit(strval($user_login)) ) {
            $sql = $sql . " OR (user_id = $user_login)";
        } 
        
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbBanUser($user_id) {
        $sql = "DELETE FROM public.bouquet_flowers WHERE bouquet_id IN (SELECT bouquet_id FROM public.bouquets WHERE user_id = $user_id)";
        $res = DB::dbConnect() -> query($sql);
        $sql = "DELETE FROM public.bouquets WHERE user_id = $user_id";
        $res = DB::dbConnect() -> query($sql);
        $sql = "DELETE FROM public.favourite_flovers WHERE user_id = $user_id";
        $res = DB::dbConnect() -> query($sql);
        $sql = "DELETE FROM public.users WHERE user_id = $user_id";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetColourSymbols($element) {
        $sql = "SELECT * FROM public.colour_meanings
        JOIN public.flower_colours ON flower_colours.colour_id = colour_meanings.colour_id
        WHERE colour_meanings.colour_id = $element";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetNumberSymbols($element) {
        $sql = "SELECT * FROM public.flower_amount
        WHERE number_of_flowers = $element";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetColourPoints($colour_id) {
        $sql = "SELECT colour_point FROM public.colour_points WHERE colour_id = $colour_id"; 
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }

    public function dbGetNumberPoints($number) {
        $sql = "SELECT number_point FROM public.number_points WHERE number_of_flowers = $number";
        $res = DB::dbConnect() -> query($sql);
        return $res;
    }
}
?>