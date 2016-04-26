# WordPress(シビレ)
## localhost
$ xcode-select --install  
$ brew install git  
$ brew install mysql  
$ sudo vim /etc/apache2/httpd.conf  
    DocumentRoot "/Users/Kei/Sites/sibire"
    <Directory "/Users/Kei/Sites/sibire">
        #
        # Possible values for the Options directive are "None", "All",
        # or any combination of:
        #   Indexes Includes FollowSymLinks SymLinksifOwnerMatch ExecCGI MultiViews
        #
        # Note that "MultiViews" must be named *explicitly* --- "Options All"
        # doesn't give it to you.
        #
        # The Options directive is both complicated and important.  Please see
        # http://httpd.apache.org/docs/2.4/mod/core.html#options
        # for more information.
        #
        Options FollowSymLinks Multiviews
        MultiviewsMatch Any

        #
        # AllowOverride controls what directives may be placed in .htaccess files.
        # It can be "All", "None", or any combination of the keywords:
        #   AllowOverride FileInfo AuthConfig Limit
        #
        #AllowOverride None
        AllowOverride All

        #
        # Controls who can get stuff from this server.
        #
        Require all granted
    </Directory>
$ sudo apachectl restart  
$ mysql.server start  
$ mysql -uroot -p  
mysql> CREATE DATABASE sibire;  
$ open http://localhost  
