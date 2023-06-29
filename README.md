# Pressbooks box

Install and update [Pressbooks](https://pressbooks.org) automatically via [Ansible](https://www.ansible.com/). Integrate it into your CI/CD process or test it locally with [Vagrant](https://www.vagrantup.com) and [VirtualBox](https://www.virtualbox.org).

## Local installation with Vagrant for testing

Scenario: To test Pressbooks a little bit with minimal effort, you can use a local installation in the local VirtualBox VM via Vargant. This is also suitable for developers to perform "system tests" for their changes.

Prerequisites
* [Git](https://git-scm.com/downloads)
* [Vagrant](https://www.vagrantup.com/downloads.html)
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)

Perform the following steps in the terminal (Linux / macOS) or in the GitBash (Windows):
```bash
git clone https://github.com/TIBHannover/pressbooks-box.git
cd pressbooks-box
vagrant up
```

When the installation is complete, Your Application Name will be running on
* 192.168.98.141

### Helpful Vagrant commands

* `vagrant up` - Creates a new VM and runs the Ansible playbook, if no VM exists. Turn on a shut down VM, if the VM was created before
* `vagrant halt` - Shuts down the VM
* `vagrant destroy` - Removes the VM
* `vagrant reload --provision` - Restarts the VM and re-runs the Ansible playbook 
* `vagrant provision` - Re-runs the Ansible playbook without updating the ansible-scripts and without restarting the VM
* `vagrant ssh` - SSH into the running VM
