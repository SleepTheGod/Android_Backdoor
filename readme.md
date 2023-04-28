SSH Backdoor Android
A simple PHP script that establishes a SSH backdoor connection to a remote server on Android devices. The script defines a command to execute a SSH connection using an SSH key and forward ports for remote access to a local server. It also includes a snippet for harvesting information from a file on the device.

How it works
The script uses proc_open to execute the SSH command and avoid shell injection. It also includes options for strict host key checking, TCP keepalive, and server alive interval to ensure the connection remains active. The script opens ports 80 and 8888 on the remote server and forwards them to ports 8080 on the local device.

Usage
To use this script, you need to modify the following variables:

/path/to/ssh_key: the path to your SSH key
/path/to/known_hosts_file: the path to your known hosts file
'/usr/': the file path for the data you want to harvest
Once you've updated these variables, upload the script to your Android device and run it. The script will establish a SSH connection to the remote server and forward the specified ports. It will also harvest data from the specified file path.

Note that this script should only be used for educational and testing purposes. Using it to gain unauthorized access to a device or server is illegal and unethical.
