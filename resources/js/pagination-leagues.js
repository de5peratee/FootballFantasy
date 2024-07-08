$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#load-more').click(function(event) {
        event.preventDefault();

        var offset = $(this).data('offset');

        $.ajax({
            url: '/load-more-leagues',
            method: 'POST',
            data: {
                offset: offset
            },
            success: function(response) {
                var leaguesList = $('#leagues-list');

                $.each(response, function(index, league) {
                    var leagueItem = `
                        <li class="leagues__item">
                            <label for="league-${league.league.id}" class="league">
                                <input class="visually-hidden" type="radio" id="league-${league.league.id}" name="league">
                                <div class="league__img-container">
                                    <img class="league__img"
                                         src="${league.league.logo}"
                                         alt="${league.league.name}"
                                         width="60" height="60" loading="lazy"
                                    />
                                </div>
                                <h4 class="league__title" title="${league.league.name}">${league.league.name}</h4>
                                <div class="league__timestamp">
                                    <time datetime="${league.seasons[0].start}">${new Date(league.seasons[0].start).toLocaleDateString()}</time>-<time datetime="${league.seasons[0].end}">${new Date(league.seasons[0].end).toLocaleDateString()}</time>
                                </div>
                            </label>
                        </li>
                    `;
                    leaguesList.append(leagueItem);
                });

                $('#load-more').data('offset', offset + 10);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
