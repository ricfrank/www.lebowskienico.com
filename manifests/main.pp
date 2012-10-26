class apt_update {
  exec { "apt_get_update":
    command => "sudo apt-get update",
    path => ["/bin", "/usr/bin"]
  }
}


class apache {
  package { "apache2-mpm-prefork":
    ensure => present,
    require => Exec["apt_get_update"]
  }

  package { "libapache2-mod-php5":
    ensure => latest,
    require => Package["apache2-mpm-prefork"],
    notify => Service["apache2"]
  }

  service { "apache2":
    ensure => running,
    require => Package["apache2-mpm-prefork"],
    subscribe => File["main-vhost.conf", "httpd.conf", "mod_rewrite", "mod_actions"]
  }

  file { "main-vhost.conf":
    path => "/etc/apache2/conf.d/main-vhost.conf",
    ensure => file,
    content => template('default/main-vhost.conf'),
    require => Package["apache2-mpm-prefork"]
  }
  
  file { "httpd.conf":
    path => "/etc/apache2/httpd.conf",
    ensure => file,
    content => template('default/httpd.conf'),
    require => Package["apache2-mpm-prefork"]
  }

  file { "mod_rewrite":
    path => "/etc/apache2/mods-enabled/rewrite.load",
    ensure => "link",
    target => "/etc/apache2/mods-available/rewrite.load",
    require => Package["apache2-mpm-prefork"]
  }

  file { "mod_actions":
    path => "/etc/apache2/mods-enabled/actions.load",
    ensure => "link",
    target => "/etc/apache2/mods-available/actions.load",
    require => Package["apache2-mpm-prefork"]
  }

  file { "mod_actions_conf":
    path => "/etc/apache2/mods-enabled/actions.conf",
    ensure => "link",
    target => "/etc/apache2/mods-available/actions.conf",
    require => Package["apache2-mpm-prefork"]
  }
}


class php5 {

  package { "php5-cli":
    ensure => present,
  }

  package { "php5":
    ensure => present,
  }

  package { "php5-mysql":
    ensure => present,
    require => Package["mysql-client", "mysql-server"]
  }

  package { "php-pear":
    ensure => present,
  }

  package { "php5-xdebug":
    ensure => present,
  }
   
  file { "php-timezone.ini":
    path => "/etc/php5/cli/conf.d/30-timezone.ini",
    ensure => file,
    content => template('default/php-timezone.ini'),
    require => Package["php5-cli"]
  }

  exec {"pear_upgrade": 
    command => "sudo pear upgrade",
    path => ["/usr/bin"],
    require => Package['php-pear']
  }

  exec { "pear_config_auto_discover":
    command => "sudo pear config-set auto_discover 1",
    path => ["/usr/bin"],
    require => [Package['php-pear'], Exec['pear_upgrade']]
  }

  exec { "discovery_phing":
    command => "sudo pear channel-discover pear.phing.info",
    path => ["/usr/bin"],
    require => [Package['php-pear'], Exec['pear_upgrade']]
  }

  exec { "install_phing":
    command => "sudo pear install phing/phing",
    path => ["/usr/bin"],
    require => [Package['php-pear'], Exec['discovery_phing'], Exec['pear_upgrade']],
  }

}


class mysql {
    package { "mysql-server":
      ensure => present,
    }

    package { "mysql-client":
      ensure => present,
    }
    
    service { mysql:
      ensure => running,
      hasstatus => true,
      require => Package["mysql-server"],
    }
}


class composer {
    exec { "composer_phar":
        cwd => "/vagrant",
        command => "curl -s http://getcomposer.org/installer | php",
        path => ["/bin", "/usr/bin"],
        creates => "/vagrant/composer.phar",
        require => Package["php5-cli", "curl", "git"]
    }

    #exec { "composer_symfony2_install":
    #    cwd => "/vagrant",
    #    command => "php composer.phar create-project symfony/framework-standard-edition app 2.1.2",
    #    path => ["/bin", "/usr/bin"],
    #    require => [Package["php5-cli", "curl", "git"], Exec['composer_phar']],
    #    timeout => '1200'
    #}

    #exec { "composer_update":
     #   cwd => "/vagrant/app",
     #   command => "php ../composer.phar update",
     #   path => ["/usr/bin"],
     #   require => Package["php5-cli"]
    #}
}

class groups {
    group { "puppet":
        ensure => present,
    }
}

class otherstuff {
     package { "git":
        ensure => latest,
    }
     package { "curl":
        ensure => present,
    }
    package {"nfs-common":
        ensure => present,
    }
    package { "vim":
      ensure => present,
    }
}

include otherstuff
include apt_update
include apache
include mysql
include php5
include groups
#include composer