<?php
/**
 * Searchform
 *
 * Custom template for search form
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="row">
        <div class="col-xs-8">
            <input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search' ); ?>" />
        </div>
        <div class="col-xs-3">
            <input type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search' ); ?>" />
        </div>
    </div>
</form>