'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    deployments: {
      options: {
        backup_dir: "db_backups"
      },
      local: {
        title: "Local",
        database: "projectdb",
        user: "projectdb",
        pass: "password",
        host: "localhost",
        url: "sharpmachine.dev"
      },
      alpha: {
        title: "Alpha",
        database: "alpha.clientsite.com",
        user: "dbusername",
        pass: "password",
        host: "localhost",
        url: "alpha.clientsite.com",
        ssh_host: "ssh_user@ssh_host"
      },
      beta: {
        title: "Beta",
        database: "beta.clientsite.com",
        user: "dbusername",
        pass: "password",
        host: "localhost",
        url: "beta.clientsite.com",
        ssh_host: "ssh_user@ssh_host"
      },
      production: {
        title: "Production",
        database: "clientsite.com",
        user: "dbusername",
        pass: "password",
        host: "localhost",
        url: "clientsite.com",
        ssh_host: "ssh_user@ssh_host"
      }
    }
  });

  // load tasks
  grunt.loadNpmTasks('grunt-deployments');
};