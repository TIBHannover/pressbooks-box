# Template for creating an application-setup-box

This template should help to set up a new "application-setup-box" (or "ansible-vagrant-box") as easy as possible. Such a box contains [Ansible](https://www.ansible.com/) scripts that are used to install an application / service automatically on any system. 

The integration of [Vagrant](https://www.vagrantup.com/) also makes it possible to execute the installation in a local virtual box on the user's computer. This allows the installation / software to be tested very easily and quickly.

Additionally, a configuration example is provided that allows easy integration of the installation scripts into a CI process.

## Requirements

* You need a [GitHub Account](https://github.com/join)
* Your new box will be created in GitHub
* No local installations, tools or frameworks are required

## Create a new box from this template

1. In this github-repo, click the green button `Use this template` or click [here](../../generate)
1. Enter a name for the new box and click `Create repository from template`
1. In the created repository you have to finalize the setup of the box - head over to this repository now.
    1. Edit the configuration of the box in [box-config.yaml](box-config.yaml) completely to your needs and commit the changes
    1. After committing to GitHub, a [GitHub Action](../../actions) is started automatically that initializes the repo. Wait until this is complete.
    1. Done, your Box should be ready now.

## Why does it take several steps to create the new box?

Currently, it takes two major steps to create a new box, as [GitHub Templates](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-template-repository) does not currently allow customization. Therefore, the first step here is to transfer the unmodified template into a new repo. Then the repo is initialized by a GitHub action, i.e. individual customizations are made via cookiecutter and superfluous files are removed.

# License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.