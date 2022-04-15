<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandesRepository::class)]
class Commandes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 20, unique: true)]
    private $reference;

    #[ORM\Column(type: 'datetime_immutable',
    options: ['default' => 'CURRENT_TIMESTAMP'])]
    private $created_at;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: true)]
    private $users;

    #[ORM\Column(type: 'string', length: 255)]
    private $adress;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\OneToMany(mappedBy: 'commandes', targetEntity: CmdDetails::class, orphanRemoval: true)]
    private $cmdDetails;

    public function __construct()
    {
        $this->cmdDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection<int, CmdDetails>
     */
    public function getCmdDetails(): Collection
    {
        return $this->cmdDetails;
    }

    public function addCmdDetail(CmdDetails $cmdDetail): self
    {
        if (!$this->cmdDetails->contains($cmdDetail)) {
            $this->cmdDetails[] = $cmdDetail;
            $cmdDetail->setCommandes($this);
        }

        return $this;
    }

    public function removeCmdDetail(CmdDetails $cmdDetail): self
    {
        if ($this->cmdDetails->removeElement($cmdDetail)) {
            // set the owning side to null (unless already changed)
            if ($cmdDetail->getCommandes() === $this) {
                $cmdDetail->setCommandes(null);
            }
        }

        return $this;
    }
}
