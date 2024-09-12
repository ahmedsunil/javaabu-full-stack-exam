<x-app-layout>
    <div class="mx-auto">
        <div class="my-[20px] mx-[110px]">
            <h1 class="text-[24px] font-extrabold leading-[50px] text-[#111827]">
                Feed</h1>
        </div>

        <div
            class="h-auto mb-[79px] mx-[96px] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 scrolling-pagination">
            @include('photos.photos-ajax', ['photos' => $photos])
        </div>

        <div id="no-photos-message" class="text-gray-500 text-center"
             style="{{ $photos->isEmpty() ? '' : 'display: none;' }}">
            <p>No photos available.</p>
        </div>


        <div id="loading" class="hidden justify-center mt-5">
            <svg class="animate-spin h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
            </svg>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            let page = 1;
            let lastPage = {{ $photos->lastPage() }};
            let loading = false;

            $(window).scroll(function () {
                if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100 && !loading && page < lastPage) {
                    loading = true;
                    page++;
                    loadMorePhotos(page);
                }
            });

            function loadMorePhotos(page) {
                $.ajax({
                    url: '{{ route("photos.index") }}',
                    type: 'get',
                    data: {page: page},
                    beforeSend: function () {
                        $('.loading').show();
                    }
                })
                    .done(function (response) {
                        if (response.photos.trim().length === 0) {
                            $('.loading').html('No more photos');
                            return;
                        }

                        $('.scrolling-pagination').append(response.photos);


                        $('.loading').hide();
                        loading = false;

                        if (page >= response.last_page) {
                            $('.loading').html('No more photos');
                        }
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        console.error('Server error occurred:', thrownError);
                        $('.loading').hide();
                        loading = false;
                    });
            }
        });
    </script>
</x-app-layout>
