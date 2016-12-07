function setDeleteAction() {
if(confirm("Are you sure want to delete these letters?")) {
document.frmUser.action = "del_let/delete_letter.php";
document.frmUser.submit();
}
}