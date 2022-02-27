# bold
Username text will be bold

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->
<ul><li><a href="https://github.com/EnterpriseBranding" rel="nofollow"><b>@EnterpriseBranding</b> <br/> </a> </li></ul><p align="center"><i><b>1</b> have starred this repository</i></p>
<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
<ul><li><a href="https://github.com/dexit" rel="nofollow"><b>@dexit</b> <br/> </a> </li><li><a href="https://github.com/trinitybranding" rel="nofollow"><b>@trinitybranding</b> <br/> </a> </li></ul><p align="center"><i><b>2</b> have forked this repository</i></p>
<!-- REPOSITORY_FORKS:END -->

---

```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_TYPE: "list"
    FORK_OUTPUT_TYPE: "list"
    STARS_OUTPUT_STYLE: "bold"
    FORK_OUTPUT_STYLE: "bold"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```