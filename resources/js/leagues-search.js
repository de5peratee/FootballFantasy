$(document).ready(function() {
    $('#search').on('input', function() {
        var searchText = $(this).val();
        if (searchText.trim() === '') {
            loadInitialLeagues();
            showLoadMoreButton();
        } else {
            $.ajax({
                url: '/search-leagues',
                type: 'GET',
                data: {
                    search: searchText
                },
                success: function(response) {
                    updateLeagues(response);
                    hideLoadMoreButton();
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + ' - ' + error);
                }
            });
        }
    });

    function loadInitialLeagues() {
        $.ajax({
            url: '/load-more-leagues',
            type: 'GET',
            data: {
                offset: 0
            },
            success: function(response) {
                updateLeagues(response);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + ' - ' + error);
            }
        });
    }

    function updateLeagues(leagues) {
        var leaguesList = $('#leagues-list');
        leaguesList.empty();
        $.each(leagues, function(index, league) {
            var listItem = '<li class="leagues__item">' +
                '<label for="league-' + league.league.id + '" class="league">' +
                '<input class="leagues__input" type="radio" id="league-' + league.league.id + '" name="league" value="' + league.league.id + '">' +
                '<div class="league__img-container">' +
                '<img class="league__img" src="' + league.league.logo + '" alt="' + league.league.name + '" width="60" height="" loading="lazy" />' +
                '</div>' +
                '<h4 class="league__title" title="' + league.league.name + '">' + league.league.name + '</h4>' +
                '<div class="league__timestamp">' +
                '<time datetime="' + league.seasons[0].start + '">' + formatDate(league.seasons[0].start) + '</time> - ' +
                '<time datetime="' + league.seasons[0].end + '">' + formatDate(league.seasons[0].end) + '</time>' +
                '</div>' +
                '</label>' +
                '</li>';
            leaguesList.append(listItem);
        });
    }

    function formatDate(dateString) {
        var date = new Date(dateString);
        return date.toLocaleDateString('ru-RU');
    }

    function hideLoadMoreButton() {
        $('#load-more').hide();
    }

    function showLoadMoreButton() {
        $('#load-more').show();
    }

    showLoadMoreButton();
});
