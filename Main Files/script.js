let selectedDevice = -1;

function shell_exec(command, callback) {
    let result;
    jQuery.ajax({
        type: "POST",
        url: 'php_functions.php',
        dataType: 'json',
        data: {functionname: 'shell_exec', arguments: [command]},

        success: function (obj, textstatus) {
            if( !('error' in obj) ) {
                callback(obj.result);
            }
            else {
                callback(obj.error);
            }
        }
    });
}

function updateTable(newInfo) {
    let lines = newInfo.split("\n");
    lines = lines.filter(function (e) { return e !== "" && !e.includes("Interface") && !e.includes("Internet")} );
    lines = lines.filter(function (e, index) {return lines.indexOf(e) === index} );
    lines = lines.map(function(e) {
        let vals = e.split(" ");
        vals = vals.filter(function(e) {return e !== ""});
        return vals;
    } );

    // Empty table
    let table = document.getElementById("devicesTable");
    let num = table.rows.length;
    for (let i = 1; i < num; i++) {
        table.deleteRow(1);
    }

    // Insert new data
    lines.forEach(function (e, index) {
       let row = table.insertRow(-1);
       let ip   = row.insertCell(0),
           mac  = row.insertCell(1),
           type = row.insertCell(2);
       ip.innerHTML = e[0];
       mac.innerHTML = e[1];
       type.innerHTML = e[2];
       row.tabIndex = 0;
       row.style.padding = "5px";

       row.onfocus = function() {
           row.style.backgroundColor = "#50c3fc";
           selectedDevice = index;
       }

       row.onblur = function() {
           row.style.backgroundColor = "white";
       }

    });

}

function pingDevice() {
    let cells = document.getElementById("devicesTable").rows[selectedDevice].cells;
    let ip   = cells[0].innerHTML,
        mac  = cells[1].innerHTML,
        type = cells[2].innerHTML;
    console.log(ip);
}

function main() {
    window.setInterval(shell_exec("arp -a", updateTable), 10000);
}