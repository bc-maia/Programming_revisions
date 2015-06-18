## Git-Specific Commands
# Since Git was designed with a big project like Linux in mind, there are a lot of Git commands. However, to use the basics of Git, you’ll only need to know a few terms. They all begin the same way, with the word “git.”

command: git init
#: Initializes a new Git repository. Until you run this command inside a repository or directory, it’s just a regular folder. Only after you input this does it accept further Git commands.

command: git config
#: Short for “configure,” this is most useful when you’re setting up Git for the first time.

command: git help
#: Forgot a command? Type this into the command line to bring up the 21 most common git commands. You can also be more specific and type “git help init” or another term to figure out how to use and configure a specific git command.

command: git status
#: Check the status of your repository. See which files are inside it, which changes still need to be committed, and which branch of the repository you’re currently working on.

command: git add
#: This does not add new files to your repository. Instead, it brings new files to Git’s attention. After you add files, they’re included in Git’s “snapshots” of the repository.

command: git commit
#: Git’s most important command. After you make any sort of change, you input this in order to take a “snapshot” of the repository. Usually it goes git commit -m “Message here.” The -m indicates that the following section of the command should be read as a message.

command: git branch
#: Working with multiple collaborators and want to make changes on your own? This command will let you build a new branch, or timeline of commits, of changes and file additions that are completely your own. Your title goes after the command. If you wanted a new branch called “cats,” you’d type git branch cats.

command: git checkout
#: Literally allows you to “check out” a repository that you are not currently inside. This is a navigational command that lets you move to the repository you want to check. You can use this command as git checkout master to look at the master branch, or git checkout cats to look at another branch.

command: git merge
#: When you’re done working on a branch, you can merge your changes back to the master branch, which is visible to all collaborators. git merge cats would take all the changes you made to the “cats” branch and add them to the master.

command: git push
#: If you’re working on your local computer, and want your commits to be visible online on GitHub as well, you “push” the changes up to GitHub with this command.

command git pull: 
# If you’re working on your local computer and want the most up-to-date version of your repository to work with, you “pull” the changes down from GitHub with this command.




#########################################################












command: git init

# Directory:
# A folder used for storing multiple files.
# Repository:
# A directory where Git has been initialized to start version controlling your files.

# The .git directory
# On the left you'll notice a .git directory. It's usually hidden but we're showing it to you for convenience.
# If you click it you'll notice it has all sorts of directories and files inside it. You'll rarely ever need to do anything inside here but it's the guts of Git, where all the magic happens.




command: git status

# command to see what the current state of our project is
# Tip:
# It's healthy to run git status often. Sometimes things change and you don't notice it.




command: git add "filename" # or
command: git add *

# To tell Git to start tracking changes made to octocat.txt, we first need to add it to the staging area by using git add

# staged: Files are ready to be committed.
# unstaged: Files with changes that have not been prepared to be committed.
# untracked: Files aren't tracked by Git yet. This usually indicates a newly created file.
# deleted: File has been deleted and is waiting to be removed from Git.




command: git commit -m "insert here the commit text" # -m parameter means message

# Staging Area: A place where we can group files together before we "commit" them to Git.
# Commit: A "commit" is a snapshot of our repository. This way if we ever need to look back at the changes we've made (or if someone else does), we will see a nice timeline of all changes.




command: git log #or git log --summary

# More useful logs: Use git log --summary to see more information for each commit. You can see where new files were added for the first time or where files were deleted. It's a good overview of what's going on in the project.




# To push our local repo to the GitHub server we'll need to add a remote repository.
# This command takes a remote name and a repository URL, which in your case is
command: git remote add origin https://github.com/try-git/try_git.git

# git remote: Git doesn't care what you name your remotes, but it's typical to name your main one origin.
# It's also a good idea for your main repository to be on a remote server like GitHub in case your machine is lost at sea during a transatlantic boat cruise or crushed by three monkey statues during an earthquake.





# Pushing Remotely
command: git push -u origin master
# The push command tells Git where to put our commits when we're read push our local changes to our origin repo (on GitHub).


# Cool Stuff: When you start to get the hang of git you can do some really cool things with hooks when you push.
# For example, you can upload directly to a webserver whenever you push to your master remote instead of having to upload your site with an ftp client. Check out Customizing Git - Git Hooks for more information.




# Pulling Remotely
# Let's pretend some time has passed. We've invited other people to our github project who have pulled your changes, made their own commits, and pushed them.
# We can check for changes on our GitHub repository and pull down any new changes by running:
command: git pull origin master

#git stash: Sometimes when you go to pull you may have changes you don't want to commit just yet. One option you have, other than commiting, is to stash the changes.
# Use the command 'git stash' to stash your changes, and 'git stash apply' to re-apply your changes after your pull.





# Differences
# Uh oh, looks like there have been some additions and changes to the octocat family. Let's take a look at what is different from our last commit by using the git diff command.
# In this case we want the diff of our most recent commit, which we can refer to using the HEAD pointer.

command: git diff HEAD

# HEAD: The HEAD is a pointer that holds your position within all your different commits. By default HEAD points to your most recent commit, so it can be used as a quick way to reference that commit without having to look up the SHA.

# Commit Etiquette: You want to try to keep related changes together in separate commits. Using 'git diff' gives you a good overview of changes you have made and lets you add files or directories one at a time and commit them separately.

command: git diff --staged
 # run git diff with the --staged option to see the changes you just staged.




# Resetting the Stage
command: git reset 'file name'
# You can unstage files by using the git reset command. Go ahead and remove




# undo 
command: git checkout -- "filename" # Files can be changed back to how they were at the last commit by using the command: git checkout -- <target>

# The '--' : So you may be wondering, why do I have to use this '--' thing? git checkout seems to work fine without it. It's simply promising the command line that there are no more options after the '--'. This way if you happen to have a branch named octocat.txt, it will still revert the file, instead of switching to the branch of the same name.




# Branching Out
command: git branch clean_up

# When developers are working on a feature or bug they'll often create a copy (aka. branch) of their code they can make separate commits to. Then when they're done they can merge this branch back into their main master branch.

# Branching
# Branches are what naturally happens when you want to work on multiple features at the same time. You wouldn't want to end up with a master branch which has Feature A half done and Feature B half done.
# Rather you'd separate the code base into two "snapshots" (branches) and work on and commit to them separately. As soon as one was ready, you might merge this branch back into the master branch and push it to the remote server.





# Switching Branches
command: git checkout clean_up

# All at Once - You can use:
command: git checkout -b new_branch

# to checkout and create a branch at the same time. This is the same thing as doing:
command: git branch new_branch
command: git checkout new_branch




# Removing All The Things
# using the git rm command which will not only remove the actual files from disk, but will also stage the removal of the files for us.
command: git rm '*.txt'

# Remove all the things!
# Removing one file is great and all, but what if you want to remove an entire folder? You can use the recursive option on git rm:

command: git rm -r folder_of_cats

# This will recursively remove all folders and files from the given directory.




# Preparing to Merge
command: git merge clean_up

# Merge Conflicts
# Merge Conflicts can occur when changes are made to a file at the same time. A lot of people get really scared when a conflict happens, but fear not! They aren't that scary, you just need to decide which code to keep.
# Merge conflicts are beyond the scope of this course, but if you're interested in reading more, take a look the section of the Pro Git book on how conflicts are presented.