<?php
/*
Plugin Name: wp-add_table
Plugin URL: hogehoge.com
Description:
Author: r.kato
Version: 0.0.0
Author URL: https://github.com/ryo1107
*/

function after_title_menu(){?>
    <script>
    function add_table(){
    var $origin_data = $('#content');
    var $table_data = '\n\n| Col 1 | Col 2 | Col 3 |\n| -------- | -------- | -------- |\n| Text | Text | Text |\n\n';
    $origin_data.val($origin_data.val()+$table_data);
    }
    </script>
    <input type="button" value="add table" onClick="add_table()"/>
<?php }
//add_action( 'edit_form_after_editor', after_editor_menu );
add_action( 'edit_form_after_title', after_title_menu );

?>'}
