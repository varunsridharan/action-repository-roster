# small
Username text will be small

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->
[![Stargazers repo roster for @varunsridharan/action-repository-roster](https://raw.githubusercontent.com/varunsridharan/action-repository-roster/main/examples/roster-images/small-stars.svg)](https://github.com/varunsridharan/action-repository-roster/stargazers)
<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
[![Forkers repo roster for @varunsridharan/action-repository-roster](https://raw.githubusercontent.com/varunsridharan/action-repository-roster/main/examples/roster-images/small-forks.svg)](https://github.com/varunsridharan/action-repository-roster/stargazers)
<!-- REPOSITORY_FORKS:END -->

---

```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_TYPE: "image"
    FORK_OUTPUT_TYPE: "image"
    STARS_OUTPUT_STYLE: "small"
    FORK_OUTPUT_STYLE: "small"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```