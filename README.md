# === Google Analytics Conversion Goals ===
Contributors: Michael Hurley
Donate link: https://facebook.com/michael.carl.hurley
Tags: Google Analytics, Analytics Goals, Goal Conversions
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 3.5
Tested up to: 4.9.4
Stable tag: 0.1

Sends events with distinct names to GA for tracking call/email clicks as goal completions

## == Description ==
Sends events with distinct names to GA for tracking call/email clicks as goal completions.

Uses js to send ga events via ga('send', 'Event' ...).

* No settings to mess with
* No excessive files or db entries
* Gets goals.min.js from a remote server cacheable with far future expiration dates
* Only loads on front end pages
* No need for a local copy as you can't send events to GA when offline
* Remote server has 99.997% uptime record

## == Installation ==
1. Place the plugin in /wp-content/plugins
2. Backup files + database *just in case*
3. Activate
4. Go to the front end to see if phone numbers are links have class *phone-link-processed*

## === GA Configuration ===
1. Go to Admin > View > Goals
2. Add Goal named Calls
3. Set type to Event
  * Set **Category** to [reg exp] lead
  * Set **Action** to [reg exp] click
  * Set **Label** to [reg exp] call
  * Set *optional* **Value** to *whatever you think calls are worth to you*
4. Add Goal name Emails
  * Set **Category** to [reg exp] lead
  * Set **Action** to [reg exp] click
  * Set **Label** to [reg exp] email
  * Set *optional* **Value** to *whatever you think email are worth to you*

## == Changelog ==

### = 0.1 =
- Initial Revision
