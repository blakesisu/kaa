# Syncing Dev, Staging, and Production Environments

The usual development workflow goes like.


1. Clone a site
1. Do some changes there
1. Then, standing in the clone, pull changes from the live site
1. If necessary, resolve the conflicts
1. Push the changes back to live


```
wp vp pull --from=<environment>
```

## Cloning



## Merge Conflicts

1. Resolve conflicts using standard diffing tools the commit the changes using git.
1. Then run `vp apply-changes` to synchronize the site's database.
