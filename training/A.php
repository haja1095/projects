<!DOCTYPE html>
<html>
    <body>
        <input type="date" id="myBirthday" value="dd-mm-yyyy">
<button onclick="submitBirthday()">Submit</button>
        <script>
function submitBirthday() {
    var birthday = document.getElementById("myBirthday").value;
    document.getElementById("displayBirthday").innerHTML = ("You are " + birthday + " years old.");
}
</script>
</body>
</html>