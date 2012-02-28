<h3>Package CKEditor</h3>

A fuelPHP drop-in package for CKEditor.

**Installation**:

 1. Download CKEditor [url=http://ckeditor.com/download]here[/url]
 2. Copy the ckeditor folder from the download archive into your public javascript folder.
 3. Download the FuelPHP CKEditor package [url=https://github.com/alwarren/fuelphp.CKEditor_package/zipball/master]here[/url].
 3. Drop the CKEDitor fuel package into fuel/packages.
 4. Open up fuel/packages/ckeditor/config/config.php in your favorite editor.
 5. Set the basepath option to the web path to your CKEditor javascript. The default path is (public)/assets/js/ckeditor.
 6. Set the toolbar option to your preferred set of editor buttons.
 7. Add any additional editor options.

**Usage:**

Load the class:

<pre>
<code>
if(!Package::loaded('CKEditor'))
	Package::load('CKEditor');
</pre>
</code>

(Optionally, you can autoload the class. See the FuelPHP documentation for more information)

Render the editor:

<pre>
<code>
echo ckeditor($text_area_name, $default_value, (array) $options, (array) $events);
</code>
</pre>
