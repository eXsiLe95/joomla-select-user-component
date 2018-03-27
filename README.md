# Example User

This is a simple Joomla component on which an administrator can choose any user in the backend. The chosen user will 
then be displayed in the frontend.

## Usage

### Build project

To build the component, either run the build.bat or build.sh script (depending on your OS). You will find a 
ready-to-install `com_exampleuser.zip` file and a `com_selectuser` file in the `/dist` folder of your cloned repository. You can install it in the 
backend of your Joomla installation.

### Testing instructions

Log in to the backend and visit `/administrator/index.php?option=com_selectuser`. Select any user in the dropdown. 
Visit `index.php/option=com_selectuser` in the frontend afterwards. The selected user will be displayed.
