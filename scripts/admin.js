function addMovieByLink() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "private/controller/add_movie.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("imdb_link=" + document.getElementById("imdb_link").value);
}