$(document).ready(function() {
    var api_key = "386fc951efe901df0dab3df4f1558d94";


    $.get("https://api.themoviedb.org/3/movie/top_rated", {api_key: api_key}, function(response) {

        if (response.results && response.results.length > 0) {
            for (var i = 0; i < response.results.length; i++) {
                var movie = response.results[i];
                var html = '<div class="movie">';
                html += '<img src="https://image.tmdb.org/t/p/w500/' + movie.poster_path + '" alt="' + movie.title + '">';
                html += '<h2>' + movie.title + '</h2>';
                html += '<p>' + movie.release_date + '</p>';
                html += '</div>';
                $("#movies").append(html);
            }
        } else {
            $("#movies").append("<p>Film bulunamadı.</p>");
        }
    });
});
$(document).ready(function() {
    var api_key = "AIzaSyD1pSyeRXglkdK7wYEd08gk5eteKZv96vI";
  
    $.get("https://www.googleapis.com/books/v1/volumes?q=subject:fiction&orderBy=newest&maxResults=20&key=" + api_key, function(response) {
      if (response.items && response.items.length > 0) {
        for (var i = 0; i < response.items.length; i++) {
          var book = response.items[i].volumeInfo;
          var html = '<div class="book">';
          if (book.imageLinks && book.imageLinks.thumbnail) {
            html += '<img src="' + book.imageLinks.thumbnail + '" alt="' + book.title + '">';
          } else {
            html += '<div class="no-image">No Image</div>';
          }
          html += '<h2>' + book.title + '</h2>';
          html += '</div>';
          $("#books").append(html);
        }
      } else {
        $("#books").append("<p>Kitap bulunamadı.</p>");
      }
    });
  });
  