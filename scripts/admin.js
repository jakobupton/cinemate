document.getElementById('submitButton').addEventListener("click", function() {
    var imdb_id = document.getElementById("imdb_id").value;


    var xhr = new XMLHttpRequest();
    xhr.open("POST", "model/add_movie.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Optionally, handle the response from the PHP script
                console.log(xhr.responseText);
            } else {
                console.error("Error:", xhr.statusText);
            }
        }
    };
    xhr.send("imdb_id=" + encodeURIComponent(imdb_id));
});