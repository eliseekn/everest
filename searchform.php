<form action="<?php echo home_url( '/' ); ?>" action="get" class="search-form">
    <div class="input-group">
        <input type="search" name="s" class="form-control" required="required" placeholder="Search" value="<?php echo get_search_query() ?>">

        <button type="submit" class="btn btn-dark-blue">
            <li class="fa fa-search"></li>
        </button>

        <input type="hidden" value="post" name="post_type" id="post_type">
    </div>
</form>
