<?php 

echo '
    <div class="pagination">
        <a class="first page" href="' . get_pagenum_link(1) . '">&laquo;</a>
        <a class="previous page" href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'">&lsaquo;</a>';
        for($i=1;$i<=$wp_query->max_num_pages;$i++)
            echo '<a class="'.($i == $curpage ? 'active ' : '').'page" href="'.get_pagenum_link($i).'">'.$i.'</a>';
        echo '
        <a class="next page" href="'.get_pagenum_link(($curpage+1 <= $wp_query->max_num_pages ? $curpage+1 : $wp_query->max_num_pages)).'">&rsaquo;</a>
        <a class="last page" href="'.get_pagenum_link($wp_query->max_num_pages).'">&raquo;</a>
    </div>
    ';