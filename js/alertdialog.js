function showConfirm() {
    var result = confirm('Are you sure you want to proceed?');
    if (result) {
        alert('Transfer is completed');
    } else {
        alert('Transfer is cancelled');
    }
}