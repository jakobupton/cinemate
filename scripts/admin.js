function addMovieByLink() {
    
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "private/controller/add_movie.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("imdb_link=" + document.getElementById("imdb_link").value);
    alert("api called with imdb_link=" + document.getElementById("imdb_link").value);
    location.reload();
}

function addShowTimeByID() {
    const movie_id = document.getElementById("addShowTimeMovieID");
    const date = document.getElementById("addShowTimeDate");
    const time = document.getElementById("addShowTimeTime");

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "private/controller/add_showtime.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("movie_id=" + movie_id.value + "&date=" + date.value + "&time=" + time.value);

    alert("api called with movie_id=" + movie_id.value + "&date=" + date.value + "&time=" + time.value);
    location.reload();
}

function deleteShowTimeByID(){
    const showtime_id = document.getElementById("deleteShowTimeID");

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "private/controller/delete_showtime.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("showtime_id=" + showtime_id.value);

    alert("api called with showtime_id=" + showtime_id.value);
    location.reload();
}

function deleteMovieByID(){
    const movie_id = document.getElementById("deleteMovieID");

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "private/controller/delete_movie.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("imdb_id=" + movie_id.value);

    alert("api called with imdb_id=" + movie_id.value);
    location.reload();
}

function promoteUserByID(){
    const customer_id = document.getElementById("promoteUserID");

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "private/controller/modify_role.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("action=promote&customer_id=" + customer_id.value);

    alert("api called with ?action=promote&customer_id=" + customer_id.value);
    location.reload();
}

function demoteUserByID(){
    const customer_id = document.getElementById("demoteUserID");

    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "private/controller/modify_role.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("action=demote&customer_id=" + customer_id.value);

    alert("api called with ?action=demote&customer_id=" + customer_id.value);
    location.reload();
}