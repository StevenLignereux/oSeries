// See http://brunch.io for documentation.
exports.files = {
  javascripts: {
    joinTo: {


      'js/app.js': /^app/,
      'js/vendor.js': /^node_modules/
    }
    // joinTo: 'js/app.js'
  },
    // les fichiers de styles sont réunis dans css/app.css
  stylesheets: {joinTo: 'css/app.css'}
};

exports.plugins = {
  // Parametrage de SASS
  sass: {
    options: {
      includePaths: [
        // Je déclare à sass-brunch l'existence de bootstrap
        'node_modules/bootstrap/scss'
      ]
    }
  },
  // Parametrage de copycat
  copycat: {
    // Je demande à copycat de créé un dossier "fonts" dans
    // public & de coller dedans le contenu de mon dossier
    // "fonts" présent dans "node_modules/font-awesome"
    'fonts': ['node_modules/font-awesome/fonts']
  },
  // Parametrage de Browser Sync
  browserSync: {
    files: [
      '*'
    ]
  }
};

exports.npm = {
  enabled: true,
  globals: {
    $: 'jquery',
    jQuery: 'jquery',
    bootstrap: 'bootstrap'
  },
  styles: {
    'bootstrap': ['dist/css/bootstrap.css'],
    'font-awesome': ['css/font-awesome.css'],
  }
};

exports.modules = {
  // on require le module "initialize" du fichier "app.js" pour éviter de le require dans le html
  autoRequire: {
    'js/app.js': ['js/initialize']
  }
};
