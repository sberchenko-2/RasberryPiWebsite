function display_shell_output(command, out) {
    let elem = document.getElementById('output');
    elem.textContent += "\n>>> " + command + "\n" + out;
}

function shell_exec(command) {
    let func = display_shell_output;
    jQuery.ajax({
        type: "POST",
        url: 'php_functions.php',
        dataType: 'json',
        data: {functionname: 'shell_exec', arguments: [command]},

        success: function (obj, textstatus) {
            if( !('error' in obj) ) {
                func(command, obj.result);
            }
            else {
                func(command, obj.error);
            }
        }
    });
}