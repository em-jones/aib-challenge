# All Inbox Code Challenge

These instructions were tested using docker-ce 18.03. If you wish to use your host environment to run the scripts, all of the Dockerfile RUN/CMD commands can be done in your environment - relying on php7.2 & node.js 10

#### Issues
While the various solutions offered in this library offer parity of accuracy to the various validation libraries selected for testing, all of the solutions currently do not accurately validate all values based on the post they were pulled from - http://codefool.tumblr.com/post/15288874550/list-of-valid-and-invalid-email-addresses

 #### Initialize application - install dependencies, run tests, and start solution documentation server
```bash
$ docker-compose up
```

Once this command has executed you should be able to see the test results and access the problem's analysis and approach 
here: http://localhost:8080/posts/em-looks-for-a-job.html  - NOTE: if you use docker toolbox for windows it's likely you're not going to be pointing to localhost, but instead will be accessing your docker via a locally available ip - 192.168.99.100 for example

### /tests
There's currently only a handful of tests and they're built to evaluate the speed and efficacy of the various libraries' email validation.

### /src
The source code for the solution

### /codechallenge
The assets for the hosted documentation

### /bin
The code generator/script and the composer installer script

#### Test playground
Using the App.php script located at src/App.php, run the script passing an argument to test its validity.

Eg:
```bash
$ php src/App.php testemail@gmail.com
```

## License

This project is licensed under the [MIT license](LICENSE).
