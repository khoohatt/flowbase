<?php
    session_start();
    require '../classes/DB.class.php';

    $db = new DB;
    $name = $_REQUEST['name'];
    $res = $db->dbGetUser($name);

    $role = $db->dbGetRole($_SESSION['user_id'])->fetch();

    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        if ((($role['user_role_id'] == 2) && ($row['user_role_id'] != 2)) || ($row['user_role_id'] == 0)) {
            echo '<form style="width:200px; float: left; padding: 10px;" method="$_GET" id="';
            echo $row["user_id"];
            echo '">';
            echo '<div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2">
                <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-4">';
            echo $row["user_login"];
            echo ' (id = ';
            echo $row["user_id"];
            echo ')</h5>
                </div>
                </div>
                <div id=';
            echo $row["user_id"];
            echo '" onclick="delUser(this)" class="u-align-left u-form-group u-form-submit">
                <a id="huh" href="#" class="u-btn u-btn-submit u-button-style u-btn-1">удалить</a>
                <input type="button" name="name" value="добавить" class="u-form-control-hidden">
                </div>
                <input name="user_id" value="';
            echo $row["user_id"];
            echo '" visibility: hidden>
                </form>';
        }
    }
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script type="text/javascript">

    function delUser(Element) {
        var par = Element.parentElement;
        var parent = par.parentElement;
        parent.removeChild(par);

        var formm = $(Element).parents('form');
        var formid = formm.attr('id');

        var $this = $(this);
        var $caption = Element;
        var form = formm;
        var formData = $(form).serializeArray();
        var route = '../funcs/ban_user.php';
        console.log(formData);
        $.ajax({
            type: "POST",
            url: route,
            data: formData,
            beforeSend: function () {
                $this.attr('disabled', true).html("Processing...");
            },
            success: function (response) {
                $("#yes").append(response);
            },
            complete: function () {
                $this.attr('disabled', false).html($caption);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            }
        });
    }
</script>