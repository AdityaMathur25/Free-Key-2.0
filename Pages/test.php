<?php
if ($thisPage == "Index-EN" || $thisPage == "Index-IT")  {
?>
    <li><a href="#" class="scroll-link" data-id="about"><?php echo 'MENU_ABOUT' ?>AAA</a></li>
    <li><a href="#" class="scroll-link" data-id="gallery"><?php echo 'MENU_GALLERY' ?></a></li>
    <li><a href="<?php echo 'MENU_CONTACTS_LINK_HOME' ?>"><?php echo 'MENU_CONTACTS' ?></a></li>
<?php
} else {
?>
    <li><a href="index.php#about" data-id="about"><?php echo 'MENU_ABOUT' ?>BBB</a></li>
    <li><a href="index.php#gallery" data-id="gallery"><?php echo 'MENU_GALLERY' ?></a></li>
    <li><a href="<?php echo 'MENU_CONTACTS_LINK' ?>"><?php echo 'MENU_CONTACTS' ?></a></li>
<?php
}
?>