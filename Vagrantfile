# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant::Config.run do |config|
  config.vm.box = "base"
  config.vm.network :hostonly, "192.168.3.13"
  config.vm.share_folder "v-root", "/vagrant", ".", :nfs => true
  config.vm.provision :puppet, :options => "--verbose", :module_path => "modules" do |puppet|
    puppet.manifests_path = "manifests"
    puppet.manifest_file = "main.pp"
  end
end
