nhatkhanh0204@DESKTOP-MGN3IP8:~$ pwd
/home/nhatkhanh0204
nhatkhanh0204@DESKTOP-MGN3IP8:~$ ls
nhatkhanh0204@DESKTOP-MGN3IP8:~$ ll
total 40
drwxr-xr-x 5 nhatkhanh0204 nhatkhanh0204 4096 Nov 10 21:53 ./
drwxr-xr-x 3 root          root          4096 Nov 10 21:38 ../
-rw------- 1 nhatkhanh0204 nhatkhanh0204  197 Nov 11 08:37 .bash_history
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204  220 Nov 10 21:38 .bash_logout
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204 3771 Nov 10 21:38 .bashrc
drwxr-xr-x 3 nhatkhanh0204 nhatkhanh0204 4096 Nov 10 21:39 .cache/
drwx------ 3 nhatkhanh0204 nhatkhanh0204 4096 Nov 10 21:39 .config/
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204  807 Nov 10 21:38 .profile
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204    0 Nov 10 21:40 .sudo_as_admin_successful
drwxr-xr-x 5 nhatkhanh0204 nhatkhanh0204 4096 Nov 10 21:53 .vscode-server/
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204  183 Nov 10 21:53 .wget-hsts
nhatkhanh0204@DESKTOP-MGN3IP8:~$ git
usage: git [--version] [--help] [-C <path>] [-c <name>=<value>]
           [--exec-path[=<path>]] [--html-path] [--man-path] [--info-path]
           [-p | --paginate | --no-pager] [--no-replace-objects] [--bare]
           [--git-dir=<path>] [--work-tree=<path>] [--namespace=<name>]
           <command> [<args>]

These are common Git commands used in various situations:

start a working area (see also: git help tutorial)
   clone      Clone a repository into a new directory
   init       Create an empty Git repository or reinitialize an existing one

work on the current change (see also: git help everyday)
   add        Add file contents to the index
   mv         Move or rename a file, a directory, or a symlink
   reset      Reset current HEAD to the specified state
   rm         Remove files from the working tree and from the index

examine the history and state (see also: git help revisions)
   bisect     Use binary search to find the commit that introduced a bug
   grep       Print lines matching a pattern
   log        Show commit logs
   show       Show various types of objects
   status     Show the working tree status

grow, mark and tweak your common history
   branch     List, create, or delete branches
   checkout   Switch branches or restore working tree files
   commit     Record changes to the repository
   diff       Show changes between commits, commit and working tree, etc
   merge      Join two or more development histories together
   rebase     Reapply commits on top of another base tip
   tag        Create, list, delete or verify a tag object signed with GPG

collaborate (see also: git help workflows)
   fetch      Download objects and refs from another repository
   pull       Fetch from and integrate with another repository or a local branch
   push       Update remote refs along with associated objects

'git help -a' and 'git help -g' list available subcommands and some
concept guides. See 'git help <command>' or 'git help <concept>'
to read about a specific subcommand or concept.
nhatkhanh0204@DESKTOP-MGN3IP8:~$ pwd
/home/nhatkhanh0204
nhatkhanh0204@DESKTOP-MGN3IP8:~$ git clone https://github.com/nhatkhanh022400/nhatkhanh^C
nhatkhanh0204@DESKTOP-MGN3IP8:~$ ^C
nhatkhanh0204@DESKTOP-MGN3IP8:~$ https://github.com/nhatkhanh022400/nhatkhanh
-bash: https://github.com/nhatkhanh022400/nhatkhanh: No such file or directory
nhatkhanh0204@DESKTOP-MGN3IP8:~$  git clone https://github.com/nhatkhanh022400/nhatkhanh
Cloning into 'nhatkhanh'...
remote: Enumerating objects: 9, done.
remote: Counting objects: 100% (9/9), done.
remote: Compressing objects: 100% (3/3), done.
Unpacking objects: 100% (9/9), done.
remote: Total 9 (delta 0), reused 6 (delta 0), pack-reused 0
nhatkhanh0204@DESKTOP-MGN3IP8:~$ ll
total 44
drwxr-xr-x 6 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 08:42 ./
drwxr-xr-x 3 root          root          4096 Nov 10 21:38 ../
-rw------- 1 nhatkhanh0204 nhatkhanh0204  197 Nov 11 08:37 .bash_history
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204  220 Nov 10 21:38 .bash_logout
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204 3771 Nov 10 21:38 .bashrc
drwxr-xr-x 3 nhatkhanh0204 nhatkhanh0204 4096 Nov 10 21:39 .cache/
drwx------ 3 nhatkhanh0204 nhatkhanh0204 4096 Nov 10 21:39 .config/
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204  807 Nov 10 21:38 .profile
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204    0 Nov 10 21:40 .sudo_as_admin_successful
drwxr-xr-x 5 nhatkhanh0204 nhatkhanh0204 4096 Nov 10 21:53 .vscode-server/
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204  183 Nov 10 21:53 .wget-hsts
drwxr-xr-x 3 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 08:42 nhatkhanh/
nhatkhanh0204@DESKTOP-MGN3IP8:~$ cd nhatkhanh/
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ code .
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git config --global user.name "John Doe"
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git config --global user.name "nhatkhanh1'
>
>
>
>
> c
>
>
>
> ^C
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ ^C
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ ^C
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git config --global user.name "nhatkhanh1"
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git config --global user.email "nhatkhanh0204@gmail.com"
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git branch khanh12
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git branch
  khanh12
* main
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git checkout khanh12
Switched to branch 'khanh12'
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git checkout -b khanh12
fatal: A branch named 'khanh12' already exists.
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git status
On branch khanh12
nothing to commit, working tree clean
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git branch
* khanh12
  main
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ code .
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git add khanh12
fatal: pathspec 'khanh12' did not match any files
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git add myfile.txt
fatal: pathspec 'myfile.txt' did not match any files
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git status
On branch khanh12
nothing to commit, working tree clean
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ mkdir test
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ ll
total 20
drwxr-xr-x 4 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:16 ./
drwxr-xr-x 6 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 08:49 ../
drwxr-xr-x 8 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:12 .git/
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204   55 Nov 11 08:44 README.md
drwxr-xr-x 2 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:16 test/
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ touch index.php
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ ll
total 20
drwxr-xr-x 4 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:16 ./
drwxr-xr-x 6 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 08:49 ../
drwxr-xr-x 8 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:12 .git/
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204   55 Nov 11 08:44 README.md
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204    0 Nov 11 09:16 index.php
drwxr-xr-x 2 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:16 test/
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ touch  test/index.php
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ code .
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git status
On branch khanh12
Your branch is up to date with 'origin/khanh12'.

nothing to commit, working tree clean
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ ll
total 20
drwxr-xr-x 4 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:16 ./
drwxr-xr-x 6 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 08:49 ../
drwxr-xr-x 8 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:27 .git/
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204  110 Nov 11 09:22 README.md
-rw-r--r-- 1 nhatkhanh0204 nhatkhanh0204    0 Nov 11 09:16 index.php
drwxr-xr-x 2 nhatkhanh0204 nhatkhanh0204 4096 Nov 11 09:17 test/
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$  git config --global user.name "nhatkhanh1"
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$  git config --global user.gmail"nhatkhanh0204@gmail.com"
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$  git clone https://github.com/nhatkhanh022400/nhatkhanh
Cloning into 'nhatkhanh'...
remote: Enumerating objects: 17, done.
remote: Counting objects: 100% (17/17), done.
remote: Compressing objects: 100% (8/8), done.
remote: Total 17 (delta 1), reused 13 (delta 0), pack-reused 0
Unpacking objects: 100% (17/17), done.
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ code .
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ pip install foobar

Command 'pip' not found, but can be installed with:

sudo apt install python-pip

nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git init
Reinitialized existing Git repository in /home/nhatkhanh0204/nhatkhanh/.git/
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git add
Nothing specified, nothing added.
Maybe you wanted to say 'git add .'?
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git add nhatkhanh
warning: adding embedded git repository: nhatkhanh
hint: You've added another git repository inside your current repository.
hint: Clones of the outer repository will not contain the contents of
hint: the embedded repository and will not know how to obtain it.
hint: If you meant to add a submodule, use:
hint:
hint:   git submodule add <url> nhatkhanh
hint:
hint: If you added this path by mistake, you can remove it from the
hint: index with:
hint:
hint:   git rm --cached nhatkhanh
hint:
hint: See "git help submodule" for more information.
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git commit -m "khanh4"
On branch khanh12
Your branch is up to date with 'origin/khanh12'.

Changes not staged for commit:
        modified:   nhatkhanh (modified content)

no changes added to commit
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git push
Username for 'https://github.com': nhatkhanh022400
Password for 'https://nhatkhanh022400@github.com':
Everything up-to-date
nhatkhanh0204@DESKTOP-MGN3IP8:~/nhatkhanh$ git config --list
user.name=nhatkhanh1
user.email=nhatkhanh0204@gmail.com
core.repositoryformatversion=0
core.filemode=true
core.bare=false
core.logallrefupdates=true
remote.origin.url=https://github.com/nhatkhanh022400/nhatkhanh
remote.origin.fetch=+refs/heads/*:refs/remotes/origin/*
branch.main.remote=origin
branch.main.merge=refs/heads/main
branch.khanh12.remote=origin
branch.khanh12.merge=refs/heads/khanh12