<form class="search-form" action="<?php echo esc_url( home_url()) ?>" method="get">
    <input type="text" name="s" id="search" placeholder="<?php echo esc_attr__('Type to search', 'techza') ?>" value="<?php the_search_query(); ?>" />
    <button type="submit"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.41471 12.8294C7.83796 12.8291 9.22019 12.3527 10.3413 11.4759L13.8662 15.0008L15 13.867L11.4751 10.3421C12.3523 9.22088 12.8291 7.83833 12.8294 6.41471C12.8294 2.8778 9.95162 0 6.41471 0C2.8778 0 0 2.8778 0 6.41471C0 9.95162 2.8778 12.8294 6.41471 12.8294ZM6.41471 1.60368C9.068 1.60368 11.2257 3.76143 11.2257 6.41471C11.2257 9.068 9.068 11.2257 6.41471 11.2257C3.76143 11.2257 1.60368 9.068 1.60368 6.41471C1.60368 3.76143 3.76143 1.60368 6.41471 1.60368Z" fill="#2C4BFF"/>
</svg>
</button>
</form>