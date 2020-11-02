# italic
Username text will be italic

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->

<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
<ul><li><a href="https://github.com/EnterpriseBranding" rel="nofollow"><i>@EnterpriseBranding</i> <br/> </a> </li></ul><p align="center"><i><b>1</b> have forked this repository</i></p>
<!-- REPOSITORY_FORKS:END -->

---
  
```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_TYPE: "list"
    FORK_OUTPUT_TYPE: "list"
    STARS_OUTPUT_STYLE: "italic"
    FORK_OUTPUT_STYLE: "italic"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```
