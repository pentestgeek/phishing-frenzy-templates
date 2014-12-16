Phishing Frenzy Templates
=========================

Email Phishing Scenarios Used for Phishing Frenzy. 

To share your Phishing Template with the community please submit a Pull Request to this Repository.

Template Gallery can be found [here](www.phishingfrenzy.com/templates/index)

Import Phishing Scenarios
-------------------------

To import Phishing Templates into Phishing Frenzy navigate to the Templates -> Restore. Browse to the Phishing frenzy Zip archive and import template.

Once imported, the template will be available and ready to be assigned for all future Phishing Campaigns.

Phishing Template Structure
-------------------------

When you submit a PR for a new template please follow the established structure to ensure we have a uniform collection of phishing scenarios.

Folder structure

<pre>
root
|--archive
|   |-- templateName.zip
|
|--email
|   |-- email.html.erb
|
|--images
|   |-- email.jpg
|   |-- website.jpg
|
|--www
|   |-- index.php
|   |-- failed.php
|
|--README.txt
</pre>

The archive folder will contain the zipped archive that was exported from the Phishing Frenzy UI.

The email folder will contain the email that is used to for the phishing template.

The images folder will contain cool looking images to show off your stellar phishing template.

The www folder is the files used for the phishing website. This can include any and all css, js or other files required to run the website.

