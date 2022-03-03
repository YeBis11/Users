var tableOrders = ["asc", "asc", "asc", "asc", "asc", "asc", "asc"];

function tableSymbolicSort(rowNumber) {
    let table = document.querySelector("#usersTable");
    let rows = Array.from(table.rows)
        .slice(1)
        .sort((rowA, rowB) =>
            rowA.cells[rowNumber].innerHTML > rowB.cells[rowNumber].innerHTML ?
            1 :
            -1
        );
    if (tableOrders[rowNumber] == "desc") {
        rows.reverse();
        tableOrders[rowNumber] = "asc";
    } else tableOrders[rowNumber] = "desc";
    table.tBodies[0].append(...rows);
}

function tableNumericSort(rowNumber) {
    let table = document.querySelector("#usersTable");
    let rows = Array.from(table.rows)
        .slice(1)
        .sort((rowA, rowB) =>
            +rowA.cells[rowNumber].innerHTML > +rowB.cells[rowNumber].innerHTML ?
            1 :
            -1
        );
    if (tableOrders[rowNumber] == "desc") {
        rows.reverse();
        tableOrders[rowNumber] = "asc";
    } else tableOrders[rowNumber] = "desc";
    table.tBodies[0].append(...rows);
}

function tableDateSort(rowNumber) {
    let table = document.querySelector("#usersTable");
    let rows = Array.from(table.rows)
        .slice(1)
        .sort((rowA, rowB) =>{
            if(rowA.cells[rowNumber].innerHTML == '') return 1;
            if(rowB.cells[rowNumber].innerHTML == '') return -1;
            return Date.parse(rowA.cells[rowNumber].innerHTML) >
            Date.parse(rowB.cells[rowNumber].innerHTML) ?
            1 :
            -1
        });
    if (tableOrders[rowNumber] == "desc") {
        rows.reverse();
        tableOrders[rowNumber] = "asc";
    } else tableOrders[rowNumber] = "desc";
    table.tBodies[0].append(...rows);
}
