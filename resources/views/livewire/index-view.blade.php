<div>
    <x-carousel />
    <!-- Page content-->
    <div class="container py-5">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="row">
                    <x-recipe-box showtype="featured" :showpost="1" />
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                <x-recipe-box showtype="pagination" :showpost="6" />
                </div>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <x-widget />
            </div>
        </div>
    </div>
</div>
