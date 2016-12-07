function setDeleteAction() {
if(confirm("Are you sure want to delete these users?")) {
document.frmUser.action = "del/delete_user.php";
document.frmUser.submit();
}
}