# italic
Username text will be italic

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->
<ul><li><a href="https://github.com/dexit" rel="nofollow"><i>@dexit</i> <br/> </a> </li><li><a href="https://github.com/trinitybranding" rel="nofollow"><i>@trinitybranding</i> <br/> </a> </li></ul><p align="center"><i><b>2</b> have starred this repository</i></p>
<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
<ul><li><a href="https://github.com/dexit" rel="nofollow"><i>@dexit</i> <br/> </a> </li><li><a href="https://github.com/trinitybranding" rel="nofollow"><i>@trinitybranding</i> <br/> </a> </li></ul><p align="center"><i><b>2</b> have forked this repository</i></p>
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
