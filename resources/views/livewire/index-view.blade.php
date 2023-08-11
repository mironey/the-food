<div>
    <x-carousel />
    <!-- Page content-->
    <div class="container py-5">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="row">
                    <div class="col">
                        This is Featured Recipe.
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <x-recipe-box :recipes="$recipes" />
                </div>

                <!-- Pagination-->
                {{$recipes->links('vendor.pagination.bootstrap-5')}}
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <x-widget />
            </div>
        </div>
    </div>
</div>
