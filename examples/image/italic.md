# italic
Username text will be italic

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->
[![Stargazers repo roster for @varunsridharan/action-repository-roster](https://raw.githubusercontent.com/varunsridharan/action-repository-roster/main/examples/roster-images/italic-stars.svg?1604333838)](https://github.com/varunsridharan/action-repository-roster/stargazers)
<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
[![Forkers repo roster for @varunsridharan/action-repository-roster](https://raw.githubusercontent.com/varunsridharan/action-repository-roster/main/examples/roster-images/italic-forks.svg?1604334238)](https://github.com/varunsridharan/action-repository-roster/stargazers)
<!-- REPOSITORY_FORKS:END -->

---
  
```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_TYPE: "image"
    FORK_OUTPUT_TYPE: "image"
    STARS_OUTPUT_STYLE: "italic"
    FORK_OUTPUT_STYLE: "italic"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```
