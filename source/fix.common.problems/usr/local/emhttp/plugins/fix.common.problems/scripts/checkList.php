<?
###############################################################
#                                                             #
# Fix Common Problems copyright 2015-2017, Andrew Zawadzki    #
#                                                             #
###############################################################

require_once("/usr/local/emhttp/plugins/dynamix/include/Markdown.php");

$checkList = "
<h2> Normal Scans </h2>

* Implied Cache Only shares do not have files / folders stored outside the cache drive
* Cache Only shares do not have files / folders stored outside the cache drive
* Array Only shares do not have files / folders stored on the cache drive
* Dynamix checking for plugin updates
* Dynamix checking for docker updates
* Community Applications Installed - Only because of its plugin auto update feature
* Community Applications set to auto update itself
* Dynamix WebUI set to auto update (via Community Applications)
* This plugin set to auto update itself (via Community Applications)
* Powerdown plugin installed
* Ability for the server to communicate to the outside world (ping github.com)
* Ability to write a file to each drive in array and cache
* Ability to write a file to the flash drive
* Ability to write a file to the docker image
* Similar named shares only differing by case (eg: MyShare and myshare)
* Default appdata storage location is set to /mnt/cache/.... (skipped 6.2-rc3+)
* Default appdata storage location is a cache only share
* Look for disabled disks
* Look for missing disks
* Look for read errors
* Look for file system errors
* Look for SSD's within the Array
* Check if plugins are up to date (and ignore if autoupdate settings are enabled in CA)
* Check for 32 bit packages in /boot/extra and /boot/packages
* Check for docker applications updates available
* Check individual docker application's /config mappings set to /mnt/user (should be /mnt/cache) (skipped 6.2-rc3+)
* Check for /var/log greater than 50% full
* Check for tmpfs greater than 75 % full
* Check for docker image file greater than 80% full
* Check for scheduled parity checks
* Check for shares with included and excluded disks both set
* Check for shares with both included and excluded disks having overlaps
* Check for global share settings both included and excluded disks set
* Check for global share settings with included and excluded disks having overlaps
* Check for docker containers having UD mounted volumes not being passed with slave option
* Check for only supported file system types (reiserFS, xfs, btrfs) on array / cache devices
* Check for flash drive formatted as fat32
* Check for built-in FTP server running
* Check for destination set for Alert level notifications
* Check for destination set for Warning level notifications 
* Check for email server and recipient addresses set if email notifications are selected
* Check for plugins installed being blacklisted
* Check for plugins installed not being known to Community Applications (implies incompatible)
* Check for ad blocker's interfering with unRaid
* Check for illegal characters in share names
* Check for docker applications not running in the network mode template author specifies
* Check for HPA on drives  (Error on parity, other warning for all other drives)
* Check for illegal suffixes on cacheFloor settings
* Check for cache free space less than cacheFloor
* Check for cache floor greater than cache total space
* Check for permissions of 0777 on shares
* Check for Hack Attacks on your server
* Check for Moderated / Blacklisted docker applications
* Check for plugins incompatible for your unRaid version
* Check for cache only shares, but no cache drive
* Check for user shares named the same as a disk share
* Check for CPU Scaling Driver installed
* Check for extra parameters set via Repository section instead of Extra Parameters Section (docker Apps)
* Check for multiple registration key files stored on the flash drive (Excludes Trial keys)
* Check for Out Of Memory errors
* Check for MCE errors
* Check for Files / Folders contained within /mnt (anything other than disk1,disk2, etc or cache or disks
* Check for exhaustion of inotify watches
* Check for SSD cache drive formatted as reiserFS (format does not support trim)
* Check for SSD cache drive, but Dynamix SSD Trim not installed
* Check for missing/different TemplateURL field in docker application's template
* Check for Marvel Based controller
* Check for Directory Bread's (ie: flash drive disconnected)
* Check for Ryzen CPU running on unRaid < 6.4
* Check for minimum 2G memory installed
* Incompatible docker applications installed
* Check for CPU overheating
* Check for Stats plugin installed, but Preclear Not installed
* Mover logging enabled
* Zenstates not running on Ryzen CPU
* PHP Warnings enabled via Tips and Tweaks plugin
* Disk included in share setting that doesn't exist on array
* Check for deprecated --cpuset-cpus in extraparameters AND via CPU pinning via GUI
* Check for collisions on CPU isolation and Docker CPU pinning (multiple collisions only)
* Check for invalid docker template xml's
* Check for write cache disabled on drives
* Check for syslog being mirrored to flash drive

<h2>Troubleshooting Mode</h2>

* Continuously 'tails' syslog to /boot/logs/syslog.txt

<b>Every 10 Minutes</b>

* var/log filling up
* rootfs filling up

<b>Every 30 Minutes</b>

* runs unRaid diagnostics
</strong>
";
echo Markdown($checkList);
?>
