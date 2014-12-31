#php MarkDown Documentation Server

- Prints the `.md` files as text.
- add content type encoding as `"text/plain"`

###This is done by the following setup
0. This assumes that you have your markdown viewer plugin on your browser.
1. Place the `index.php` file on the root directory of the `.md` files.
2. On the `cmd` or `bash` run this code on the same directory:
```
	php -S 127.0.0.1:8080 -t . index.php 
```
3. Now, on your favorite browser, go to address:
```
	http://127.0.0.1:8080/documentation-page.md
```

###Tested using...
1. `Firefox browser` with markdown viewer plugin from `https://github.com/Thiht/markdown-viewer`.


###For some tweaking - some docs

```
	/*
	php builtin server command
	------------------------------------
	php -S 127.0.0.1:8080 -t . index.php 
	------------------------------------
		-S [address]:[port]
			-S 127.0.0.1:8080
		-t [root directory] [router file]
			-t . index.php 
	*/
```

