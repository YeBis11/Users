let checkall = document.querySelector("#check-all");
checkall.onchange = function() {
    let checkboxes = document.querySelectorAll(
        'input[type="checkbox"]:not(#check-all)'
    );
    for (let checkbox of checkboxes) {
        checkbox.checked = checkbox.checked ? false : true;
    }
};
