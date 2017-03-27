<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<?php if (!$isMainpage) { ?>
			</div>
		</div>
	</div>
<?php } ?>

	<footer class="footer">
        <div class="footer__copyright">
            <span class="footer__bold"><?php echo GetMessage('FOOTER_COPYRIGHT'); ?> <?php echo date('Y'); ?> «<?php echo GetMessage('FOOTER_SITENAME'); ?>»</span> <?php echo GetMessage('FOOTER_ALL_RIGHT_RESERVED'); ?>
        </div>

        <div class="footer__medialine">
            <?php echo GetMessage('FOOTER_DEVELOP_BY'); ?>:
            <?php if ($APPLICATION->GetCurPage(false) === '/') { ?>
                <a class="footer__medialine-link"  target="_blank" href="http://www.medialine.by/"><?php echo GetMessage('FOOTER_MEDIALINE'); ?></a>
            <?php } else { ?>
                <a class="footer__medialine-link"  target="_blank" rel="nofollow" href="http://www.medialine.by/"><?php echo GetMessage('FOOTER_MEDIALINE'); ?></a>
            <?php } ?>
        </div>
    </footer>
</div>
</body>
</html>
