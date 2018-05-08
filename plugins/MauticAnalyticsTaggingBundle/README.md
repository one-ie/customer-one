# MauticAnalyticsTaggingBundle

<p>Plugin add Google Analytics tagging to Mautic.</p>
<p>For example plugin transform your url <br />http://domain.tld <br />to <br /> http://domain.tld?utm_source=mautic&utm_medium=email&utm_campaign=email-category&utm_content=email-subject</p>

## How to install?

<ol>
<li>Copy files to plugin dir</li>
<li>Go to your Settings > Plugins section.</li>
<li>Install/Upgrade Plugins should add new plugin. If not, please clear cache dir or save configuration.</li>
<li>Go to Settings > Configuration. Manage new Analytics taggins settings.</li>
<li>Send example email. UTM tags will be added to every link.</li>
</ol>

## What do you need know?

Plugin skip url If url has already utm parameters.<br />
Plugin support url with hashs (#).
