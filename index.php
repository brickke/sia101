<?PHP 

		echo "WELCOME";
	echo "Hi I'm Ann Marie C. Gebiertas";

	<html>
		<body>
			<h1> DOCKER INSTALLATION</h1>
			<p> In installing docker, either you choose in enabling WSL or directly download docker in windows</p>
			<p>NOTE: Dont forget to check your windows features: WSL enabled, HyperV, and Virtual Machine</p>
			
			<p>In installing docker, go to docker.com</p>
			<p>Get Started, copy command and paste it in your windows terminal. Make sure that your terminal is in Administrator command</p>
			<p>Open another terminal and type wsl and youre good to go</p>
			<p>
					wsl -l -v checks the current version of youre running
					wsl --set version ubuntu 20.04 2 (or any distro you have)

					Go to your docker desktopif you have installed windows docker, go to settings, resources, wsl integration, check ubuntu and click apply and restore_include_path

					sudo docker images ls-a to check images 
					sudo su -root 
					docker run hello-world (visit hubdocker.com forother repository)

					Make sure you have installed php and apache2

					type yourecho php
					
					Now create a github repository

					cd /var/www/html 
					ls  to check lists
					vim index php create and edit your index

					sudo su root
					touch index php create index
					:wq in saving and exiting
					mkdir in creating directory
					mv -move index file to the specific directory you want
					
					git init - initialization, must be done first 
					git status -check status of your git
					git add -add index
					git commit -m 


					If encountered problem with showing the index in your github repository, and have trouble with token 

						install gh by visiting gh-cli installation in your web browser
						copy and paste the following command in the distro you have 
						apt update -updates the whole terminal 
						apt install gh -install gh 
						gh auth login github
						Select github, https, y
						hit enter to Login with web browser
						copy one time code in your web browser, lastly
						git push --set-upstream origin master -push to your github repository
						 

						NOTE:  error like !bash event not found
								type set +H 
						
				
					
						 

			</p>

			
			
		
		</body>
	</html>
	

?>
