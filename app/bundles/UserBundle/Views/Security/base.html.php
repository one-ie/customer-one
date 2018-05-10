<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $view['slots']->get('pageTitle', 'Mautic'); ?></title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo $view['assets']->getUrl('media/images/favicon.ico') ?>" />
    <link rel="apple-touch-icon" href="<?php echo $view['assets']->getUrl('media/images/apple-touch-icon.png') ?>" />
    <?php $view['assets']->outputSystemStylesheets(); ?>
    <?php echo $view->render('MauticCoreBundle:Default:script.html.php'); ?>
    <?php $view['assets']->outputHeadDeclarations(); ?>
</head>
<body>
<section id="main" role="main">
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="panel" name="form-login">
                    <div class="panel-body">
                        <div class="mautic-logo img-circle mb-md text-center">
                          <svg width="202px" height="80px" viewBox="0 0 202 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <!-- Generator: Sketch 40.3 (33839) - http://www.bohemiancoding.com/sketch -->
                              <title>one-dark</title>
                              <desc>Created with Sketch.</desc>
                              <defs></defs>
                              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <image id="one-dark" x="0" y="0" width="202" height="80" xlink:href="data:image/png;base64,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"></image>
                              </g>
                          </svg>
                        </div>
                        <div id="main-panel-flash-msgs">
                            <?php echo $view->render('MauticCoreBundle:Notification:flashes.html.php'); ?>
                        </div>
                        <?php $view['slots']->output('_content'); ?>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-4 col-lg-offset-4 text-center text-muted">
                <?php echo $view['translator']->trans('mautic.core.copyright', ['%date%' => date('Y')]); ?>
            </div>
        </div>
    </div>
</section>
<?php echo $view['security']->getAuthenticationContent(); ?>
</body>
</html>
