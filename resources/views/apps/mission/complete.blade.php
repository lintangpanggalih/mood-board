@extends('apps.wrapper')
@section('title')
    Quiz ({{ $quiz->order ?? '-' }})
@endsection

@section('content')
    <style>
    </style>
    <img class="centered-img article-board-img" src="{{ asset('img/elements/15.png') }}" alt="">
    <div class="container" style="height: 60vh;margin-top: 40vh;"></div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('form').submit(function(e) {
                e.preventDefault();
                $(this).prop('disabled', true)
                setTimeout(() => {
                    $('#quiz-wrapper').fadeOut(1000)
                }, 500);

                var answer_data = $("button[type=submit][clicked=true]").val(),
                    data = $(this).serialize() + '&answer=' + answer_data;

                // return console.log(data);
                $.ajax({
                    method: "POST",
                    url: $(this).attr('action'),
                    data: data,
                    success: function(resp) {
                        console.log(resp);
                        let response = '',
                            progress = resp.progress,
                            order = Object.keys(progress).length;
                        // console.log(progress, order);
                        if (resp.data.is_correct) {
                            response = $(
                                `<img class="centered-img reaction-img" src="{{ asset('img/elements/12.png') }}" alt="">`
                            );
                        } else {
                            response = $(
                                `<img class="centered-img reaction-img" src="{{ asset('img/elements/13.png') }}" alt="">`
                            );
                        }
                        setTimeout(() => {
                            response.hide().fadeIn(500)
                            $('.container').append(response)
                        }, 1500);

                        (async () => {
                            let article = await loadArticle(order)
                            let article_html = $(`<div class="centered-img article-board">
                                <h5 style="color: maroon;font-weight: bold;">"` + article.title + `"</h5>
                                <p>` + article.content + `</p>
                            </div>`)
                            console.log(article);
                            setTimeout(() => {
                                $('.container img').fadeOut(500);
                                $('.article-board-img').fadeIn(500)
                                article_html.hide().fadeIn(500)
                                $('.container').append(article_html)
                            }, 3500);
                            setTimeout(() => {
                                $('.next').fadeIn(500)
                            }, 4000);
                        })()
                    },
                })
            })

            async function loadArticle(order) {
                let url = '{{ route('mission.article', ':order') }}'.replace(':order', order);
                let article = null;

                await $.get(url, function(data) {
                    article = data
                })
                return article
            }
            $("form button[type=submit]").click(function() {
                $("button[type=submit]", $(this).parents("form")).removeAttr("clicked");
                $(this).attr("clicked", "true");
            });

        })
    </script>
@endpush
