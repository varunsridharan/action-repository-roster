# small
Username text will be small

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->
<ul><li><a href="https://github.com/EnterpriseBranding" rel="nofollow"><sub>@EnterpriseBranding</sub> <br/> </a> </li></ul><p align="center"><i><b>1</b> have starred this repository</i></p>
<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
<ul><li><a href="https://github.com/dexit" rel="nofollow"><sub>@dexit</sub> <br/> </a> </li><li><a href="https://github.com/trinitybranding" rel="nofollow"><sub>@trinitybranding</sub> <br/> </a> </li></ul><p align="center"><i><b>2</b> have forked this repository</i></p>
<!-- REPOSITORY_FORKS:END -->

---

```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_TYPE: "list"
    FORK_OUTPUT_TYPE: "list"
    STARS_OUTPUT_STYLE: "small"
    FORK_OUTPUT_STYLE: "small"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```